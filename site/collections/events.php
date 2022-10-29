<?php

return function () {
    return page('events')
        ->children()
        ->listed()
        ->sortBy('date', 'desc');
};
