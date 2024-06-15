<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function aboutshow()
    {
        return view('about-show');
    }
    public function booknow()
    {
        return view('book-now');
    }
    // book now qr
    public function booknowqr(){
        return view('book-now-qr');
    }
    public function houston()
    {
        return view('houston');
    }
    public function newjersey()
    {
        return view('new-jersey');
    }
    public function newyork()
    {
        return view('new-york');
    }
    public function dallas()
    {
        return view('dallas');
    }
    public function sanjose()
    {
        return view('san-jose');
    }
    public function losangeles()
    {
        return view('los-angeles');
    }
    public function booknowhidden()
    {
        return view('book-now-hidden');
    }
    public function pastshows()
    {
        return view('past-shows');
    }
    public function contactus()
    {
        return view('contact-us');
    }
    public function termsandcondition()
    {
        return view('terms-condition');
    }
    public function blog()
    {
        $blog = Blog::orderBy('id', 'DESC')->latest()->paginate(10);
        return view('blog', compact('blog'));
    }
    public function blog1($title, $id)
    {
        try {

            $nw  = Blog::where('id', $id)->firstOrFail();
            $news = Blog::orderBy('id', 'DESC')->latest()->get();
            return view('blog1', compact('nw', 'news'));
        } catch (\Exception $ex) {
            if ($ex instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
                return redirect(route('blogs'))->with('erros', 'Whoops, Something Went Wrong !');
            }
            return redirect(route('blogs'))->with('erros',  $ex->getMessage());
        }
    }
    public function quickenquiry()
    {
        return view('quickenquiry');
    }
    public function mail(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->contact;
        $city = $request->city;
        $message = $request->message;

        $html = "
    <table style='width: 100%;border: 2px solid black;border-collapse: collapse;'>
    <tr style='width: 100%;border: 2px solid black;'>
    <th style='width: 20%;border: 2px solid black;'>Enter your Name</th>
    <th style='width: 20%;border: 2px solid black;'>Enter your Email</th>
    <th style='width: 20%;border: 2px solid black;'>Enter your Mobile Number</th>
    <th style='width: 20%;border: 2px solid black;'>Enter your City</th>
 <th style='width: 20%;border: 2px solid black;'>Enter your Message</th>


    </tr>
    <tr style='width: 100%;border: 2px solid black;'>
    <th style='width: 20%;border: 2px solid black;'>$name</th>
    <th style='width: 20%;border: 2px solid black;'>$email</th>
    <th style='width: 20%;border: 2px solid black;'>$phone</th>
    <th style='width: 20%;border: 2px solid black;'>$city</th>
     <th style='width: 20%;border: 2px solid black;'>$message</th>
            </tr>
            </table>";
        $mail = new PHPMailer();

        $mail->SMTPDebug = 0;
        $mail->Host = "mail.cinemaonstage.com";

        $mail->Port = 465;
        $mail->IsHTML(true);

        //Set who the message is to be sent from
        $mail->setFrom('info@cinemaonstage.com', 'Cinema On Stage');

        //Set who the message is to be sent to
        $mail->addAddress('info@cinemaonstage.com', 'Cinema On Stage');

        $mail->addBCC('mirzafaizan1931@gmail.com', 'Faizan');


        //Set the subject line
        $mail->Subject = 'Cinema On Stage Contact Form';
        $mail->Body = $html;


        if (!$mail->send()) {
            return redirect()->route('home');
        } else {
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_RETURNTRANSFER => 1,
              CURLOPT_URL => 'https://sanjarcrm.com/api/leads/submit',
              CURLOPT_POST => 1,
              CURLOPT_POSTFIELDS => array(
                'name' => $name,
                'contact' => $phone,
                'email' => $email,
                'message' => $message,
                'location' => $city,
                'table_alias' => 'cinemaonstage_com_',
                'api_key' => '3c97a03bf567aa7ade93f52110a11652'
              )
            ));

            // Send the request & save response to $resp
            $resp = curl_exec($curl);
            // Close request to clear up some resources
            curl_close($curl);
            return redirect()->route('home');
        }
    }
}
