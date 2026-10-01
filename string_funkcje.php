<?php 
    echo strlen("hello world");
    echo strlen("łódź");
    //polskie znaki w unicode zajmują 2 bajty 
    echo mb_strlen("łódź");
    echo str_word_count("hello world");
    ?>
    