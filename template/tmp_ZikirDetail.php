<script id="tmp_ZikirDetail" type="text/x-handlebars-template">

<div class="ZikirDetail col-xs-12">

    <div class="Button">
        <a href="#"><i class="fa fa-user"></i> Şuan zikir çekiyor <i class="fa fa-angle-right"></i></a>
    </div>

    <div class="List List--day">
        <ol>
            {{#user_of_the_day}}
            <li><a href="">
                <span class="List__Name">{{user_of_the_day.name}} {{user_of_the_day.surname}}</span>
                <span class="List__Count">{{user_of_the_day.count}}</span>
            </a></li>
            {{/user_of_the_day}}
        </ol>
    </div>

    <div class="List List--week">
        <ol>
            {{#user_of_the_week}}
            <li><a href="">
                <span class="List__Name">{{user_of_the_week.name}} {{user_of_the_week.surname}}</span>
                <span class="List__Count">{{user_of_the_week.count}}</span>
            </a></li>
            {{/user_of_the_week}}
        </ol>
    </div>

    <div class="List List--month">
        <ol>
            {{#user_of_the_month}}
            <li><a href="">
                <span class="List__Name">{{user_of_the_month.name}} {{user_of_the_month.surname}}</span>
                <span class="List__Count">{{user_of_the_month.count}}</span>
            </a></li>
            {{/user_of_the_month}}
        </ol>
    </div>

</div>
</script>