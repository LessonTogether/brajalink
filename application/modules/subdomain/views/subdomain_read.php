<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Subdomain Read</h2>
        <table class="table">
	    <tr><td>Subdomain</td><td><?php echo $subdomain; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('subdomain') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>