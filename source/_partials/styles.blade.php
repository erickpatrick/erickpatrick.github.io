<style amp-custom>
body {
    margin: 0;
    border-top: 5px #1e3760 solid;
    padding: 20px 0 150px 0;
    font: normal normal normal 16px/1.5 Helvetica, Verdana, sans-serif;
    color: #333;
}

.container {
    margin: 0 auto;
    width: 90%;
}

.link-back {
    padding: 5px;
    display: inline-block;
    background-color: #1e3760;
    color: #fff;
    text-decoration: none;
}

.link-back:visited,
.link-back:active {
    background-color: #2f4871;
}

.link-back:hover {
    background-color: #0d2650;
}

.articles {
    font-size: 1.3rem;
}

.services {
    display: grid;
    grid-template-columns: 1fr;
    grid-gap: 1.5rem 2rem;
    justify-items: center;
    align-items: center;
    justify-content: center;
}
.article {
    border-bottom: 1px #efefef solid;
}

.service {
    justify-self: center;
    align-self: center;
}

.article__date,
.article__title {
    margin-bottom: 0px;
}

.article__title,
.article__excerpt {
    margin-top: 0px;
}

.article__date {
    font-size: 1rem;
}

footer.container {
    padding-top: 50px;
    text-align: center;
    color: #1e3760;
}

footer.container::after {
    content: '';
    background: rgba(255,255,255,1);
    background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,.5) 47%, rgba(255,255,255,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,0)), color-stop(47%, rgba(255,255,255,.5)), color-stop(100%, rgba(255,255,255,1)));
    background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,.5) 47%, rgba(255,255,255,1) 100%);
    background: -o-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,.5) 47%, rgba(255,255,255,1) 100%);
    background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,.5) 47%, rgba(255,255,255,1) 100%);
    background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,.5) 47%, rgba(255,255,255,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=0 );

    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    height: 200px;
}

.salutation {
    color: #1e3760;
}

h2 small {
    display: block;
    font-size: 1.4rem;
    color: #999;
}

.brazil {
    padding: 0px 10px;
    display: inline-block;
    background: green;
    color: yellow;
}

.germany {
    padding: 0px 10px;
    display: inline-block;
    background: black;
    color: red;
}

.nintendo {
    font-weight: bold;
    color: red;
}

@media (min-width: 425px) {
    .container {
        font-size: 1.1rem;
    }
}

@media (min-width: 560px) {
    .container {
        font-size: 1.2rem;
    }
}

@media (min-width: 640px) {
    .container {
        width: 75%;
    }
    
    .services {
        grid-template-columns: 1fr 1fr;
    }
}

@media (min-width: 1024px) {
    .container {
        font-size: 1.4rem;
    }

    .services {
        grid-template-columns: 1fr 1fr 1fr;
    }
}

@media (min-width: 1280px) {
    .container {
        width: 60%;
    }
}

@media (min-width: 1440px) {
    .container {
        font-size: 1.6rem;
    }
}
</style>
