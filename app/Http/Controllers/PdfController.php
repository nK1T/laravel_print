<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use League\Csv\Writer;
use Illuminate\Support\Facades\Response;


class PdfController extends Controller
{
    public function showData(){
        $cruds = Crud::all();
        return view('index', compact('cruds'));
    }
    
    
    // Generate PDF
    public function createPDF()
{
        $data = Crud::all();
        // Retrieve all records from the database

        // Share data to the view
        view()->share('cruds', $data);

        // Create an instance of Dompdf with options
        $options = new Options();
        $options->set('isRemoteEnabled', true); // Enable loading remote assets (e.g., images) in the PDF
        $dompdf = new Dompdf($options);

        // Load the view and render it to HTML
        $html = view('show', ['data' => $data])->render();
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render HTML to PDF
        $dompdf->render();

        // Get total page count
        $pageCount = $dompdf->getCanvas()->get_page_count();

        // Add page numbers and page count to each page
        $canvas = $dompdf->getCanvas();
        $font = $dompdf->getFontMetrics()->getFont("Arial", "normal", "normal");
        $fontSize = 15;
        $color = array(0, 0, 0);
        $x = 500; // Adjust the X-coordinate as needed
        $y = 10;  // Adjust the Y-coordinate as needed
        $canvas->page_text($x, $y, "Page {PAGE_NUM} of $pageCount", $font, $fontSize, $color);

        // Generate the modified PDF string
        $modifiedPdfString = $dompdf->output();

        // Output the modified PDF to the browser
        return response($modifiedPdfString, 200)->header('Content-Type', 'application/pdf');
    }

    public function createCSV(){
        // Retrieve all users from the database
        $data = Crud::all();
    
        $csv = Writer::createFromPath('php://temp', 'w+');
    
        // Add CSV headers
        $csv->insertOne(['ID', 'First Name', 'Last Name','Gender', 'Age','YOB', 'Father Name', 'Roll No', 'City', 'State']);
    
        // Add user data to CSV rows
        foreach ($data as $user) {
            $csv->insertOne([$user->id, $user->first_name, $user->last_name, $user->gender, $user->age, $user->yob, $user->father_name, $user->roll_no, $user->city, $user->state]);
        }
    
        // Set the CSV file name
        $fileName = 'users.csv';
    
        // Set the headers for the response
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=' . $fileName,
        ];
    
        // Return the CSV file as a response
        return Response::make($csv->getContent(), 200, $headers);
    }
}
