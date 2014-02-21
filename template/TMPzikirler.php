<script id="TMPzikirler" type="text/x-handlebars-template">
{{#zikir}}
    <div class="Zikir col-xs-12" data-id="{{id}}">
        <div class="Col--white">
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
    </div>
{{/zikir}}
</script>