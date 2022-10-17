<style type="text/css">

    html{
        scroll-behavior: smooth;
    }    

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Merriweather', serif;
    }

    .nav_style{
        background-color: #a29bfe;
    }

    .nav_style a{
        color: white;
    }

    .main_header{
        height: 450px;
        width:100%;
    }

    .rightside h1{
        font-size: 3rem;
    }

    .corona_rotate img{
        animation: corona 3s linear infinite;
    }

    @keyframes corona {
        0% {transform: rotate(0);}
        100%{transform: rotate(360deg);}
    }

    .leftside img {
        animation: heartbeat 5s linear infinte;
    }

    @keyframes heartbeat{
        0% {transform: scale( .75 );}
        20% {transform: scale( 1 );}
        40% {transform: scale( .75 );}
        60% {transform: scale( 1 );}
        80% {transform: scale( .75 );}
        100% {transform: scale( .75 );}
    }

        /******************************** CORONA UPDATE ********************************/
    .corona_update{
        margin: 0 0 30px 0;
    }
    .corona_update h3{
        color: #ff7675;
    }
    .corona_update h1{
        font-size: 2rem;
        text-align: center;
    }

    /******************************** ABOUT CORONA  ********************************/
    .sub_section {
        background-color: #fbfafd;
    }

    /********************************** FOOTER **********************************/
    .footer_style{
        background-color: #a29bfe!important;
    }

    .footer_style p {
        margin-bottom: 0!important;
    }

    #myBtn {
        display: none;  /* Hidden by default */
        position: fixed;  /* Fixed/ Sticky position */
        bottom: 30px;  /* Place the button at the bottom of the page */
        right: 40px;  /* Place the button 30px from the right */
        z-index: 99;  /* Make sure it does not overlap */
        border: none;  /* Removes border */
        outline: none;  /* Removes outline */
        background-color: #00a8ff;  /* Set the background color */
        color: white;  /* Text color */
        cursor: pointer;  /* Add a mouse pointer on hover */
        padding: 10px;  /* Some padding */
        border-radius: 10px;  /* Rounded corners */
    }

    #myBtn:hover{
        background-color: #606060; /*  Add a dark-grey background on hover */ 
    }

    th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

td,
th {
    border: 1px solid #ddd;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
    cursor: pointer;
}
</style>