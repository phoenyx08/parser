# Parser
Simple DOM to Object parser

## Example application

*Please, put this application in the folder named 'app' in the root of repository. Consult with .gitignore - it is ignored there*

```$php
<?php

require dirname(__DIR__) . '/vendor/autoload.php';

$html = '<html>
  <head>
   <title>Parser test app</title>
  </head>
 <body>
  <div class="content">
   <h1>This is the header of test app</h1>
   <ul>
     <li>This is the first list item</li>
     <li>This is the second list item</li>
     <li>This is the third list item</li>
   </ul>
  </div>
 </body>
</html>';

$parser = new PhoenyxStudio\Parser\FakeParser();

$parseResult = $parser->parse($html);

$doc = $parseResult->ejectObject();

foreach($doc->getListItems() as $listItem) {
    echo $listItem . '<br>';
}
```
