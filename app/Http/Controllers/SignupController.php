<!-- <?php

// namespace App\Http\Controllers;

// use App\Models\Signup;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Str;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// class SignupController extends Controller
// {
//     public function create()
//     {
//         return view('user.login');
//     }

//     public function register(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//             'password' => ['required', 'string', 'min:8'],
//         ]);

//         if ($validator->fails()) {
//             return back()->withErrors($validator)->withInput();
//         }

//         $verificationToken = Str::random(40);

//         $user = Signup::create([
//             'email' => $request->email,
//             'password' => Hash::make($request->password),
//             'verification_token' => $verificationToken,
//             'is_verified' => false,
//         ]);

//         // Create a new instance of PHPMailer
//         $mail = new PHPMailer(true);

//         try {
//             // Set up SMTP configuration
//             $mail->isSMTP();
//             $mail->Host       = env('MAIL_HOST');
//             $mail->Port       = env('MAIL_PORT');
//             $mail->SMTPAuth   = true;
//             $mail->Username   = env('MAIL_USERNAME');
//             $mail->Password   = env('MAIL_PASSWORD');
//             $mail->SMTPSecure = env('MAIL_ENCRYPTION');
//             $mail->SMTPDebug  = 0;

//             // Set the sender and recipient
//             $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
//             $mail->addAddress($user->email);

//             // Set the email subject and body
//             $mail->Subject = 'Verify your email address';
//             $mail->Body    = 'Please verify your email with the link below: <a href="' . route('verify.email', $verificationToken) . '">Verify Email</a>';
//             $mail->AltBody = 'Please verify your email with the link below: ' . route('verify.email', $verificationToken);

//             // Send the email
//             $mail->send();
//         } catch (Exception $e) {
//             // Handle the exception if an error occurs
//             return back()->with('error', 'Failed to send verification email. Please try again later.');
//         }

//         return back()->with('success', 'Please check your email for verification instructions.');
//     }

//     public function verifyEmail($token)
//     {
//         $user = Signup::where('verification_token', $token)->first();

//         if (!$user) {
//             return redirect()->route('login')->with('error', 'Invalid verification token.');
//         }

//         $user->is_verified = true;
//         $user->verification_token = null;
//         $user->save();

//         return redirect()->route('login')->with('success', 'Email verified successfully. You can now log in.');
//     }
// } -->
