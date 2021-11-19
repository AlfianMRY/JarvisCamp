<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form jarviscamp</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome">
        <div>
            <p>First Name :</p>
            <input type="text" name="fname">
        </div>
        <div>
            <p>Last Name :</p>
            <input type="text" name="lname">
        </div>
        <div>
            <p>Gender :</p>
            <input type="radio" value="male"> Male <br>
            <input type="radio" value="female"> Female <br>
            <input type="radio" value="Other"> Other
        </div>
        <div>
            <p>Nationality</p>
            <select name="" id="">
                <option value="">Indonesian</option>
                <option value="">Arabian</option>
                <option value="">American</option>
            </select>
        </div>
        <div>
            <p>Language Spoken :</p>
            <input type="checkbox"> I have a bike <br>
            <input type="checkbox"> I have a car <br>
            <input type="checkbox"> I have a boat
        </div>
        <div>
            <p>Bio :</p>
            <textarea cols="30" rows="10"></textarea>
        </div><br>
        <button>Sign Up</button>
    </form>
</body>
</html>