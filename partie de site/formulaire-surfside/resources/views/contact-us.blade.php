<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>
<body>
    <div class="container">
<div class="row">
    <div class="bootstrap">
        <div class="card">
            <div class="card-header">
                Contact Us
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required/>
                    </div>  
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="msg">Message</label>
                        <textarea name="msg" class="form-control" required></textarea>
                    </div>

                    <input type="submit" class="btn float-right" value="Submit"/>
                </form>

            </div>
        </div>
    </div>
</div>

    </div>
</body>
</html>