<?php
namespace pgsavis\cms;
use Illuminate\Support\ServiceProvider;


/**
 * Created by PhpStorm.
 * User: Jamal
 * Date: 9/2/2018
 * Time: 11:50 PM
 */
class CmsServiceProvider extends ServiceProvider
{
    public  function register(){
        $this->app->bind('cms',function(){
            return new Cms;
        });
    }
}