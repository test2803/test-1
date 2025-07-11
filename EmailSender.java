import javax.mail.*;
import javax.mail.internet.*;
import java.util.Properties;

public class EmailSender {
    public static void sendEmail(String name, String email, String message) {
        final String username = "ericknyakireri2803@gmail.com";
        final String password = "iloveux@#2803"; // Use Gmail App Password
        
        Properties props = new Properties();
        props.put("mail.smtp.auth", "true");
        props.put("mail.smtp.starttls.enable", "true");
        props.put("mail.smtp.host", "smtp.gmail.com");
        props.put("mail.smtp.port", "587");
        
        Session session = Session.getInstance(props,
            new javax.mail.Authenticator() {
                protected PasswordAuthentication getPasswordAuthentication() {
                    return new PasswordAuthentication(username, password);
                }
            });
        
        try {
            Message mail = new MimeMessage(session);
            mail.setFrom(new InternetAddress(username));
            mail.setRecipients(Message.RecipientType.TO, 
                InternetAddress.parse(username));
            mail.setSubject("New Contact Form Submission");
            mail.setText("Name: " + name + "\nEmail: " + email + "\nMessage: " + message);
            
            Transport.send(mail);
        } catch (MessagingException e) {
            throw new RuntimeException(e);
        }
    }
}