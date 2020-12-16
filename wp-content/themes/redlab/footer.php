<footer class="main-footer">
    <div class="row">
        <div class="col-5 footer-gauche">
            <div class="container-logo-footer">
                <?php the_custom_logo(); ?>
            </div>
            <div class="container">
                <h2 class="titre-footer"> Contact : <h2>
                <h3 class="info-footer">
                    Tel : +33 (0)1 84 25 20 08
                    <br>
                    Mail: contact@redlab.io
                </h3>
                <h2 class="titre-footer"> Adresse : </h2>
                <h3 class="info-footer">
                    Seine Innopolis
                    <br>
                    72 Rue de la République
                    <br>
                    76140 Le Petit-Quevilly
                    <br>
                    France
                </h3>       
            </div>
            <div class="reseaux-sociaux">
                <img src="<?php bloginfo("template_directory")?>/images/facebook.svg">
                <img src="<?php bloginfo("template_directory")?>/images/youtube.svg">
                <img src="<?php bloginfo("template_directory")?>/images/linkedin.svg">
            </div>

            <iframe class="map-footer" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.005069814676!2d1.0638788151112417!3d49.427718168405214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0de1bca82cc31%3A0x695476863e20ed2e!2s74%20Avenue%20Jean%20Jaur%C3%A8s%2C%2076140%20Le%20Petit-Quevilly!5e0!3m2!1sfr!2sfr!4v1608040097541!5m2!1sfr!2sfr"  height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>            
        </div>
                

        <div class="col-7 footer-droit">
            <h2 class="titre-formulaire-contact"> N'hésitez pas à nous contacter</h2>

<form>

    <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Nom ou Société*"></textarea>
    </div>

    <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Sujet de votre message*"></textarea>
    </div>

    <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Téléphone*"></textarea>
    </div>

    <div class="form-group">
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Message*"></textarea>
    </div>

    <input type="submit" value=Envoyer>


</form>

        </div>
        
    </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>