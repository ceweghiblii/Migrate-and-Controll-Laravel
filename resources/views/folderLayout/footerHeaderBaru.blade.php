<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Navigation Bar</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <nav style="display: flex; justify-content: space-between; align-items: center; background-color: #333; padding: 10px 20px;">
        <div class="logo">
            <a href="#" style="color: white; text-decoration: none; font-size: 24px;">MyWebsite</a>
        </div>
        <ul style="list-style: none; display: flex; margin: 0;">
            <li style="margin: 0 15px;"><a href="#home" style="color: white; text-decoration: none; font-size: 18px;">Home</a></li>
            <li style="margin: 0 15px;"><a href="{{route('about')}}"style="color: white; text-decoration: none; font-size: 18px;" >About</a></li>
            <li style="margin: 0 15px;"><a href="#services" style="color: white; text-decoration: none; font-size: 18px;">Services</a></li>
            <li style="margin: 0 15px;"><a href="#contact" style="color: white; text-decoration: none; font-size: 18px;">Contact</a></li>
        </ul>
    </nav>

    @yield('isiWebsite')

    <footer style="background-color: #333; color: white; text-align: center; padding: 20px 0; position: relative; bottom: 0; width: 100%;">
        <p style="margin: 0;">&copy; 2024 MyWebsite. All Rights Reserved.</p>
        <div style="margin-top: 10px;">
            <a href="#privacy" style="color: white; text-decoration: none; margin: 0 10px;">Privacy Policy</a>
            <a href="#terms" style="color: white; text-decoration: none; margin: 0 10px;">Terms of Service</a>
            <a href="#contact" style="color: white; text-decoration: none; margin: 0 10px;">Contact Us</a>
        </div>
    </footer>
</body>
</html>
