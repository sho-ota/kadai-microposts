{"filter":false,"title":"error_messages.blade.php","tooltip":"/message-board/resources/views/commons/error_messages.blade.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["@if (count($errors) > 0)","    <ul class=\"alert alert-danger\" role=\"alert\">","        @foreach ($errors->all() as $error)","            <li class=\"ml-4\">{{ $error }}</li>","        @endforeach","    </ul>","@endif",""],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":0},"end":{"row":7,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1603899955325,"hash":"a9a4b938cf2af418ab0812a642ed04cc7ea6d0f7"}