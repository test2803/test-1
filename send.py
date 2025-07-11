from flask import Flask, request, jsonify
import smtplib
from email.mime.text import MIMEText

app = Flask(_name_)

@app.route('/submit-form', methods=['POST'])
def handle_form():
    data = request.form
    
    # Email content
    subject = "New Contact Form Submission"
    body = f"""
    Name: {data['name']}
    Email: {data['email']}
    Message: {data['message']}
    """
    
    # Send email
    send_email(subject, body)
    
    return jsonify({"status": "success"})

def send_email(subject, body):
    sender = "email"
    recipient = "ericknyakieri2803@gmail.com"
    password = "iloveux@#2803"  # Use Gmail App Password
    
    msg = MIMEText(body)
    msg['Subject'] = subject
    msg['From'] = sender
    msg['To'] = recipient
    
    with smtplib.SMTP_SSL('smtp.gmail.com', 465) as server:
        server.login(sender, password)
        server.sendmail(sender, recipient, msg.as_string())

if _name_ == '_main_':
    app.run(debug=True)