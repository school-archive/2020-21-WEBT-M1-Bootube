<?php

interface VideoInterface {
    function getHTMLEmbedded(); // zb <iframe..... oder <video....
    function getName(); // entweder youtube, vimeo oder local
}