<div class="col-21">
        <div class="col-5"></div>
       <h1 class="dark">Welcome <?php echo( $_SESSION['user'])?> ! <h1>
</div>
<div class="col-21">
        <div class="col-5"></div>
        <div class="col-10">
        <fieldset>
        <form method="post" action="/logout">
                        <legend>Log out!</legend>
                        <input type="submit" name="logout" value="Bye! See ya later!">
                </fieldset>         
                <br/><br/>
        </div>
</div>
