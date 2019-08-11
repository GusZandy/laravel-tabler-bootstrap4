<div class="panel panel-default card">
    <ul class="nav nav-tabs" style="white-space: nowrap; overflow-x: auto; overflow-y: hidden">
        {{ $nav_tabs }}
    </ul>
    <div class="tab-content">
        {{ !empty($tab_panes) ? $tab_panes : $slot }}
    </div>
</div>
