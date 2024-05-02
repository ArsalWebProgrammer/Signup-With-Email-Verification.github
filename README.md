# SignupWithEmailVerification.github
# Signup Form with Email Verification

This is a simple signup form with email verification implemented using PHP (with PDO), HTML, Bootstrap, and JavaScript. Users can sign up with a username, email, and password, and receive a verification email to verify their email address.

## Usage Example

### Signup Form

![Signup Form](signup_form.png)

Users can fill out the signup form with their desired username, email, and password. Client-side validation ensures that all fields are filled out and the email is in the correct format before submission.

### Verification Email

Upon successful signup, users receive a verification email containing a unique link to verify their email address.

![Verification Email](verification_email.png)

Users can click on the verification link in the email to confirm their email address and complete the signup process.

### Success Message

After successful verification, users receive a confirmation message informing them that their email has been verified and they are now registered.

![Success Message](success_message.png)

## Files Structure

- `signup.html`: HTML file containing the signup form.
- `signup.php`: PHP script to handle user signup and email verification.
- `verify.php`: PHP script to verify the email address.
- `signup.js`: JavaScript file for client-side form validation.
- `style.css`: CSS file for styling the signup form and messages.

## Contributing

Contributions are welcome! If you have any suggestions or improvements, feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
