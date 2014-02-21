<script id="TMPprofil" type="text/x-handlebars-template">
    <div class="Profil col-xs-12">
        <div class="Profil__Content Col--white">
            <h2 class="Profil__Name">{{user.name}} {{user.surname}}</h2>
            <p class="Profil__Order">{{order}}. Sırada</p>
            <!--small class="Profil__Info">(Çektiği bütün zikirlerin toplamı.)</small-->
            <h3 class="Profil__TotalCount">{{order}}</h3>
        </div>
        <div class="Button">
            <a href="#"><i class="fa fa-user"></i> Şuan zikir çekiyor <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="List">
            <ol>
                <li><a href="">
                    <span class="List__Name">{{user_of_the_day.name}} {{user_of_the_day.surname}}</span>
                    <span class="List__Count">{{user_of_the_day.count}}</span>
                </a></li>
            </ol>
        </div>
    </div>
</script>