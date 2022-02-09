<style>
body {
    margin: 0;
    padding: 0;
    background-color: #202124;
    color: #bdc1c6;
}

.block {
    /* position: relative; */
    /* margin: 250px auto; */
    /* width: 80%; */
    /* height: 300px; */
    /* background: linear-gradient(0deg, #000, #272727); */
    display: flex;
    /* justify-content: center; */
    align-items: center;
    position: relative;
    /* color: #fff; */
    /* text-align: center; */
    /* font-size: 50px; */
    /* font-weight: bold; */
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
</style>

<div class="block">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, aut facilis. Nam sed minus laborum odio,
        repellat ad expedita autem voluptatum hic, quasi voluptates, molestias ut soluta perspiciatis! Ut, adipisci.
		Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>
</div>