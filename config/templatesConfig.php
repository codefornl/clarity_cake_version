<?php
$config = [
    'Templates'=>[
        'shortForm' => [
            'formStart' => '<form {{attrs}}>',
            'label' => '<label class="col-sm-2 col-form-label" {{attrs}}>{{text}}</label>',
            'input' => '<div class="col-sm-10"><input class="form-control" type="{{type}}" name="{{name}}" {{attrs}} /></div>',
            'textarea' => '<div class="col-sm-10"><textarea class="form-control" type="{{type}}" name="{{name}}" {{attrs}}></textarea></div>',
            'select' => '<div class="col-md-4"><select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'inputContainer' => '<div class="form-group row {{required}}" form-type="{{type}}">{{content}}</div>',
            'checkContainer' => '',],
        'longForm' => [
            'formStart' => '<form {{attrs}}>',
            'label' => '<label class="col-md-2 control-label" {{attrs}}>{{text}}</label>',
            'input' => '<div class="col-md-6"><input type="{{type}}" name="{{name}}" {{attrs}} /></div>',
            'select' => '<div class="col-md-6"><select name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'inputContainer' => '<div class="form-group {{required}}" form-type="{{type}}">{{content}}</div>',
            'checkContainer' => '',],
        'fullForm' => [
            'formStart' => '<form {{attrs}}>',
            'label' => '<label class="col-md-2 control-label" {{attrs}}>{{text}}</label>',
            'input' => '<div class="col-md-10"><input type="{{type}}" name="{{name}}" {{attrs}} /></div>',
            'select' => '<div class="col-md-10"><select name="{{name}}"{{attrs}}>{{content}}</select></div>',
            'inputContainer' => '<div class="form-group {{required}}" form-type="{{type}}">{{content}}</div>',
            'checkContainer' => '',]
    ]
];
