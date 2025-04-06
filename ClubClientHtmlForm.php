<!DOCTYPE html>
<html>
<head>
    <title>Club Member Registration</title>
</head>
<body>
    <h2>Club Member Registration</h2>
    <form>
        <table border="1">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name" required></td>
            </tr>
            <tr>
                <td>Email Address:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Club Interest:</td>
                <td>
                    <select name="interest" required>
                        <option value="music">Music</option>
                        <option value="sports">Sports</option>
                        <option value="arts">Arts</option>
                        <option value="science">Science</option>
                        <option value="debate">Debate Club</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Membership Type:</td>
                <td>
                    <select name="membership_type" required>
                        <option value="normal">Normal</option>
                        <option value="vip">VIP</option>
                        <option value="premium">Premium</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Membership Duration:</td>
                <td>
                    <select name="membership_duration" required>
                        <option value="1_year">1 Year</option>
                        <option value="2_years">2 Years</option>
                        <option value="3_years">3 Years</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Payment Type:</td>
                <td>
                    <select name="payment_type" required>
                        <option value="normal">Normal</option>
                        <option value="premium">Premium</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Contact Number:</td>
                <td><input type="text" name="contact" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Register"></td>
            </tr>
        </table>
    </form>
</body>
</html>