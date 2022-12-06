<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Page</title>
    
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="<?=base_url;?>public_html/style-form.css">
  </head>
  <body>
    <header>

    </header>
    <main class="main">
		<a style="color: white;" href="<?=base_url;?>index.php/AdminController/logout" class="btn btn-success" >LOGOUT</a>
        <table class="center">
            <tr>
                <th>
                    <a href="<?=base_url;?>index.php/AdminController/startup">
                        <img src="<?=base_url;?>public_html/images/img2.png" class="image" alt="">
                    </a>
                </th>

                <th>
                    <a href="<?=base_url;?>index.php/AdminController/innovation">
                        <img src="<?=base_url;?>public_html/images/img31.png" class="image" alt="">
                    </a>
                </th>
            </tr>
            <tr>
                <th>
                    <h2>Startup</h2>
                </th>
                <th>
                    <h2>
                        Innovation
                    </h2>
                </th>
            </tr>
        </table>
    </main>
  </body>
</html>
