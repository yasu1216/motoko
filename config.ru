# This file is used by Rack-based servers to start the application.

require ::File.expand_path('../config/environment',  __FILE__)
run Rails.application

public/
    index.html
    ...
Gemfile
Gemfile.lock
config.ru

run Rack::Directory.new 'public'
use Rack::Static, urls: [''], root: 'public', index: 'index.html'
run lambda {|env|}
