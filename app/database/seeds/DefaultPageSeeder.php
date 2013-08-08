<?php

class DefaultPageSeeder extends Seeder {
    public function run() {
        $page = new Page;

        $page->title    = 'Home';
        $page->slug     = 'index.html';
        $page->type     = 'page';
        $page->template = 'none';
        $page->content  = '<div id="full-page">
    <div class="jumbotron container">
        <h1>Hello World!</h1>
        <p>Welcome to the default BeardCMS page.</p>
    </div>
</div>';
        $page->isDefault = true;

        $page->save();
    }
}