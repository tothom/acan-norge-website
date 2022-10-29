</main>

<footer class="footer">
        <div class="grid">
            <div class="column" style="--columns: 2">
                    <img src="<?= url('assets') ?>/icons/ACAN_Logo_Badge_Red_@4x.webp">
            </div>
            <div class="column" style="--columns: 6">
                <p style="color: var(--color-primary)">
                    <b>ACAN</b> er et internasjonal nettverk av fagpersoner innen arkitektur og andre byggrelaterte
                    faggrupper som ønsker å ta grep for å håndtere de sammenflettede klima- og miljøkrisene.
                </p>
            </div>
            <div class="column" style="--columns: 2">
                <a href="https://www.instagram.com/acannorge">
                    <img src="<?= url('assets') ?>/icons/Instagram_Logo_Black_100px.png">
                </a>
            </div>
            <div class="column" style="--columns: 2">
                <a href="https://www.facebook.com/acannorge/">
                         <img src="<?= url('assets') ?>/icons/Facebook__Logo_Black_100px.png">
                </a>
            </div>
        </div>
</footer>

<?= js([
  'assets/js/prism.js',
  'assets/js/lightbox.js',
  'assets/js/index.js',
  '@auto'
]) ?>

</body>
</html>