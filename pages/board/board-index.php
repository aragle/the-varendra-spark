<style>
body {
    margin: 0;
    padding: 0;
    background-color: #202124;
    color: #bdc1c6;
}

.block {
    margin: 250px auto;
    background: linear-gradient(0deg, #000, #272727);
    display: flex;
    align-items: center;
    position: relative;
    text-align: right;
    font-size: 40px;
    font-weight: bold;
    width: 300px;
    height: 300px;
    background: linear-gradient(0deg, #000, #262626);
    padding: 30px;
    margin: 120px auto;
}

.block:before,
.block:after {
    content: '';
    position: absolute;
    left: -2px;
    top: -2px;
	text-align: justify;
    background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00, #ffff00, #ff0000, #fb0094,
            #0000ff, #00ff00, #ffff00, #ff0000);
    background-size: 400%;
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    z-index: -1;
    /* animation: steam 20s linear infinite; */
}

@keyframes steam {
    0% {
        background-position: 0 0;
    }

    50% {
        background-position: 400% 0;
    }

    100% {
        background-position: 0 0;
    }
}

.block:after {
    filter: blur(50px);
}

p{
    margin: 0 auto;
}
</style>

<div class="block">
    <p>
        open ↴ <br>
        TREASURE
    </p>
</div>