<div id="keywords-contain">
    <ul id="keywords">
        <li ng-repeat="pics in pc.pictures">
<!--      ui-sref is the name of the state activated        -->
            <a ui-sref="pictures({title:pics.name}})">
                {{pics.name}}
            </a>
        </li>
    </ul>
</div>