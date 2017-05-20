 <div id="leftColumn">
         
        <div id="leftMenu">
            <div class="manuCaption">
                Меню:
            </div>
            {foreach  $rsCategories as $item}
                <a href="#">{$item['name']}</a><br />
                {/foreach}
        </div>
        </div>
