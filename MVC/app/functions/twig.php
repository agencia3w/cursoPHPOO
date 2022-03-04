<?php

$this->functions[] = $this->functionsToView('user', function(){
    return 'dados user';
});

$this->functions[] = $this->functionsToView('test', function(){
    return 'dados teste';
});