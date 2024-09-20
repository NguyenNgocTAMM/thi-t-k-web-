<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt Upload Form</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f2f5;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .form-group .input-item {
            width: 48%;
        }
        label {
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
            display: block;
        }
        input[type="text"], input[type="email"], textarea {
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
            font-size: 14px;
        }
        input[type="submit"] {
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .checkbox-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .checkbox-column {
            display: flex;
            flex-direction: column;
        }
        .checkbox-column label {
            font-weight: normal;
            margin-bottom: 5px;
            color: #555;
        }
        .file-upload {
            padding: 15px;
            border: 2px dashed #ccc;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 10px;
            cursor: pointer;
            background-color: #f9f9f9;
            transition: border-color 0.3s ease;
        }
        .file-upload:hover {
            border-color: #007bff;
        }
        textarea {
            resize: none;
            height: 120px;
            font-family: 'Roboto', sans-serif;
        }
        .input-item div, .file-upload + div, textarea::placeholder {
            color: #999;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 20px;
        }
        .file-upload + div {
            text-align: center;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Payment Receipt Upload</h2>
    <form action="upload_form.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="input-item">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" required>
                <div>first name</div>
            </div>
            <div class="input-item">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" required>
                <div>last name</div>
            </div>
        </div>

        <div class="form-group">
            <div class="input-item">
                <label for="email">Email</label>
                <input type="email" name="email" required>
                <div>example@gmail.com_create_guid</div>
            </div>
            <div class="input-item">
                <label for="invoice_id">Invoice ID</label>
                <input type="text" name="invoice_id" required>
            </div>
        </div>
        
        <h2 style="font-size: 15px; margin-top: 0; text:centre ">Pay For</h2>
        <div class="checkbox-group">
            <div class="checkbox-column">
                <label><input type="checkbox" name="pay_for[]" value="15K Category"> 15K Category</label>
                <label><input type="checkbox" name="pay_for[]" value="35K Category"> 35K Category</label>
                <label><input type="checkbox" name="pay_for[]" value="55K Category"> 55K Category</label>
                <label><input type="checkbox" name="pay_for[]" value="75K Category"> 75K Category</label>
                <label><input type="checkbox" name="pay_for[]" value="116K Category"> 116K Category</label>
            </div>
            <div class="checkbox-column">
                <label><input type="checkbox" name="pay_for[]" value="Shuttle One Way"> Shuttle One Way</label>
                <label><input type="checkbox" name="pay_for[]" value="Shuttle Two Ways"> Shuttle Two Ways</label>
                <label><input type="checkbox" name="pay_for[]" value="Training Cap Merchandise"> Training Cap Merchandise</label>
                <label><input type="checkbox" name="pay_for[]" value="Compressport T-Shirt Merchandise"> Compressport T-Shirt Merchandise</label>
                <label><input type="checkbox" name="pay_for[]" value="Buf Merchandise"> Buf Merchandise</label>
                <label><input type="checkbox" name="pay_for[]" value="Other"> Other</label>
            </div>
        </div>
        
        <label for="fileToUpload">Please upload your payment receipt:</label><br>
        <div class="file-upload">
            <input type="file" name="fileToUpload" id="fileToUpload" required>
        </div>
        <div>jpg, jpeg, png, gif (1mb max)</div>
        
        <div>
            <label for="additional_info">Additional Information</label>
            <textarea name="additional_info" placeholder="type here"></textarea>
        </div>

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
