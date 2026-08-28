<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Appointment</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .hero {
            background: #562edaff;
            color: white;
            padding: 80px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
            animation: float 20s linear infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-100px);
            }
        }

        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            animation: fadeInDown 1s ease;
        }

        .hero p {
            font-size: 1.3em;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
            animation: fadeInUp 1s ease 0.2s both;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            padding: 60px 20px;
            background: #f8f9fa;
        }

        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            font-size: 3em;
            margin-bottom: 15px;
        }

        .feature-card h3 {
            color: #667eea;
            margin-bottom: 10px;
        }

        .booking-section {
            padding: 60px 20px;
            background: white;
        }

        .booking-form {
            max-width: 600px;
            margin: 0 auto;
            background: #f8f9fa;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .booking-form h2 {
            text-align: center;
            color: #667eea;
            margin-bottom: 30px;
            font-size: 2em;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1em;
            transition: border-color 0.3s ease;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #667eea;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: #562edaff;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .success-message {
            display: none;
            background: #4caf50;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 20px;
            animation: fadeInUp 0.5s ease;
        }

        .success-message.show {
            display: block;
        }

        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 30px 20px;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2em;
            }

            .hero p {
                font-size: 1.1em;
            }

            .booking-form {
                padding: 25px;
            }
        }
    </style>
</head>

<body>
    <div class="hero">
        <h1>Book Your Appointment Today</h1>
        <p>Schedule your visit in just a few clicks - fast, easy, and convenient</p>
    </div>

    <div class="features container">
        <div class="feature-card">
            <div class="feature-icon">⚡</div>
            <h3>Quick Booking</h3>
            <p>Schedule your appointment in under 2 minutes with our streamlined process</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">📅</div>
            <h3>Flexible Schedule</h3>
            <p>Choose from a wide range of available time slots that fit your busy lifestyle</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">✔️</div>
            <h3>Instant Confirmation</h3>
            <p>Get immediate confirmation and reminders for your upcoming appointment</p>
        </div>
    </div>

    <div class="booking-section">
        <div class="booking-form">
            <h2>Schedule Your Visit</h2>
            <form id="appointmentForm">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="service">Service Type *</label>
                    <select id="service" name="service" required>
                        <option value="">Select a service...</option>
                        <option value="consultation">Consultation</option>
                        <option value="checkup">General Checkup</option>
                        <option value="followup">Follow-up Visit</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date">Preferred Date *</label>
                    <input type="date" id="date" name="date" required>
                </div>

                <div class="form-group">
                    <label for="time">Preferred Time *</label>
                    <input type="time" id="time" name="time" required>
                </div>

                <div class="form-group">
                    <label for="notes">Additional Notes</label>
                    <textarea id="notes" name="notes" placeholder="Any special requirements or additional information..."></textarea>
                </div>

                <button type="submit" class="submit-btn">Book Appointment</button>
            </form>

            <div id="successMessage" class="success-message">
                <h3>✓ Appointment Booked Successfully!</h3>
                <p>We'll send you a confirmation email shortly.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; bytetiful 2025. All rights reserved.</p>
        <p>Need help? Contact us at bytetiful@outlook.com</p>
    </footer>

    <script>
        // Set minimum date to today
        const dateInput = document.getElementById('date');
        const today = new Date().toISOString().split('T')[0];
        dateInput.min = today;

        // Form submission handling
        document.getElementById('appointmentForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                service: document.getElementById('service').value,
                date: document.getElementById('date').value,
                time: document.getElementById('time').value,
                notes: document.getElementById('notes').value
            };

            // In a real application, you would send this data to a server
            console.log('Appointment Data:', formData);

            // Show success message
            document.getElementById('successMessage').classList.add('show');

            // Reset form
            this.reset();

            // Hide success message after 5 seconds
            setTimeout(function() {
                document.getElementById('successMessage').classList.remove('show');
            }, 5000);

            // Scroll to success message
            document.getElementById('successMessage').scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        });
    </script>
</body>

</html>

</php>