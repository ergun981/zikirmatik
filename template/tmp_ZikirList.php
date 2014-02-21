<script id="tmp_ZikirList" type="text/x-handlebars-template">

<div class="ZikirList col-xs-12">
    {{#zikir}}
    <div class="Zikir" data-id="{{id}}">
        <header class="Zikir__Content">
            {{name}}
        </header>
        <footer class="Zikir__Footer">
            <div class="Zikir__TotalOnline">
                <i class="fa fa-user"></i> <span>{{total_online}}</span>
            </div>
            <div class="Zikir__TotalCount">
                {{total_count}}
            </div>
        </footer>
    </div>
    {{/zikir}}
</div>

</script>