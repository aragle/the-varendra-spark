<style>
<<<<<<< HEAD
.feature-grad {
    background: rgb(196, 77, 41);
    background: linear-gradient(180deg, #000 0%, #23262b 100%);
    padding: 15px 0;

}

.rap-container {
    width: 95%;
    margin: 15px auto 20px auto;
}

.mejs__container {
    margin-top: 10px;
}

.mejs__controls {
    display: block;
}

.mejs__controls,
.mejs__container {
    background: none !important;
}

.mejs__time {
    color: #777;
    font-weight: normal;
}

.podcast {
    background-image: linear-gradient(270deg, #c44d2d -50%, #dddddd 99%);

    padding: 30px;
    border-radius: 3px;
}

.podcast__episode_title {
    font-size: 28px;
    font-weight: bold;
    line-height: 1.5;
    margin-bottom: 0;
    padding-bottom: 0;
    margin-top: 0;
    color: #333;
}

.podcast__title {
    margin-top: 10px;
    text-transform: uppercase;
    font-size: 11px;
    color: #555;
}

.podcast__title i {
    font-style: normal;
    font-weight: normal;
    text-transform: capitalize;
    margin-left: 10px;
}

.podcast__meta {
    background-color: #bf8070;
    background-image: -webkit-linear-gradient(180deg, #bf8070 0%, #b3adad 99%);
    background-image: -moz-linear-gradient(180deg, #bf8070 0%, #b3adad 99%);
    background-image: -o-linear-gradient(180deg, #bf8070 0%, #b3adad 99%);
    background-image: linear-gradient(180deg, #bf8070 0%, #b3adad 99%);

    margin: 40px -30px -30px -30px;
    padding: 30px;
    display: flex;
    justify-content: space-between;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
}

.podcast__meta>audio {
    margin: 0 20px;
    width: -moz-available;
    width: -webkit-fill-available;
    width: fill-available;
}

.podcast__meta .artwork {
    margin-right: 0;
    transform: translateY(-70px);
}

.podcast__meta .artwork>img {
    border-radius: 3px;
    width: 150px;
    height: 150px;
    box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.1);
    margin-bottom: -80px;
}

.mejs-prepended-buttons {
    display: flex;
}

.mejs-appended-buttons {
    display: flex;
    justify-content: space-evenly;
}

.mejs__play>button {
    background: transparent url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/mediaplayer-sprite-gray.svg') no-repeat;
}

.mejs__pause>button {
    background: transparent url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/mediaplayer-sprite-gray.svg') no-repeat;
    background-position: -20px 0;
}

.mejs__mute>button {
    background: transparent url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/mediaplayer-sprite-gray.svg') no-repeat;
    background-position: -60px 0;
}

.mejs__unmute>button {
    background: transparent url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/mediaplayer-sprite-gray.svg') no-repeat;
    background-position: -40px 0;
}

.mejs-skip-back-button>button,
.mejs__skip-back-button>button {
    background: transparent url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/skipback.svg');
}

.mejs-jump-forward-button>button,
.mejs__jump-forward-button>button {
    background: url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/jumpforward.svg') no-repeat;
}

.mejs__button>button {
    color: #555;
}

.mejs__horizontal-volume-slider {
    display: none !important;
}

@media screen and (max-width: 767px) {
    .no-small-screen {
        display: none;
    }

    .podcast__meta {
        padding: 15px 15px;
=======
    .feature-grad {
        background: rgb(196, 77, 41);
        background: linear-gradient(180deg, #000 0%, #23262b 100%);
        padding: 15px 0;

    }

    .rap-container {
        width: 95%;
        margin: 15px auto 20px auto;
    }

    .mejs__container {
        margin-top: 10px;
    }

    .mejs__controls {
        display: block;
    }

    .mejs__controls,
    .mejs__container {
        background: none !important;
    }

    .mejs__time {
        color: #777;
        font-weight: normal;
    }

    .podcast {
        background-image: linear-gradient(270deg, #c44d2d -50%, #dddddd 99%);

        padding: 30px;
        border-radius: 3px;
    }

    .podcast__episode_title {
        font-size: 28px;
        font-weight: bold;
        line-height: 1.5;
        margin-bottom: 0;
        padding-bottom: 0;
        margin-top: 0;
        color: #333;
    }

    .podcast__title {
        margin-top: 10px;
        text-transform: uppercase;
        font-size: 11px;
        color: #555;
    }

    .podcast__title i {
        font-style: normal;
        font-weight: normal;
        text-transform: capitalize;
        margin-left: 10px;
    }

    .podcast__meta {
        background-color: #bf8070;
        background-image: -webkit-linear-gradient(180deg, #bf8070 0%, #b3adad 99%);
        background-image: -moz-linear-gradient(180deg, #bf8070 0%, #b3adad 99%);
        background-image: -o-linear-gradient(180deg, #bf8070 0%, #b3adad 99%);
        background-image: linear-gradient(180deg, #bf8070 0%, #b3adad 99%);

        margin: 40px -30px -30px -30px;
        padding: 30px;
>>>>>>> parent of 22c27de (update)
        display: flex;
        justify-content: space-between;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
<<<<<<< HEAD
        justify-content: center;
    }
}
</style>

<script>
"use strict";

const options = {
    defaultSpeed: '1.00',
    speeds: ['1.25', '1.50', '2.00', '0.75'],
    loop: true,
    skipBackInterval: 15,
    jumpForwardInterval: 15,
    features: [
        "playpause",
        "progress",
        "current",
        "duration",
        "skipback",
        "changespeed",
        "volume",
        "jumpforward",
    ]
}

new MediaElementPlayer(
    document.querySelector("audio"),
    options
);

// Separate the audio controls so I can style them better.
(() => {
    const elementTop = document.createElement('div');
    const elementBottom = document.createElement('div');
    elementTop.classList.add('mejs-prepended-buttons');
    elementBottom.classList.add('mejs-appended-buttons');

    const controls = document.querySelector('.mejs__controls');
    controls.prepend(elementTop);
    controls.append(elementBottom);

    const controlsChildren = Array.from(controls.childNodes).filter(v => v.className.startsWith("mejs_"));

    controlsChildren.slice(0, 3).forEach(elem => {
        elementTop.append(elem)
    });

    controlsChildren.slice(3, controlsChildren.length).forEach(elem => {
        elementBottom.append(elem)
    })
})()
=======
    }

    .podcast__meta>audio {
        margin: 0 20px;
        width: -moz-available;
        width: -webkit-fill-available;
        width: fill-available;
    }

    .podcast__meta .artwork {
        margin-right: 0;
        transform: translateY(-70px);
    }

    .podcast__meta .artwork>img {
        border-radius: 3px;
        width: 150px;
        height: 150px;
        box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.1);
        margin-bottom: -80px;
    }

    .mejs-prepended-buttons {
        display: flex;
    }

    .mejs-appended-buttons {
        display: flex;
        justify-content: space-evenly;
    }

    .mejs__play>button {
        background: transparent url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/mediaplayer-sprite-gray.svg') no-repeat;
    }

    .mejs__pause>button {
        background: transparent url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/mediaplayer-sprite-gray.svg') no-repeat;
        background-position: -20px 0;
    }

    .mejs__mute>button {
        background: transparent url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/mediaplayer-sprite-gray.svg') no-repeat;
        background-position: -60px 0;
    }

    .mejs__unmute>button {
        background: transparent url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/mediaplayer-sprite-gray.svg') no-repeat;
        background-position: -40px 0;
    }

    .mejs-skip-back-button>button,
    .mejs__skip-back-button>button {
        background: transparent url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/skipback.svg');
    }

    .mejs-jump-forward-button>button,
    .mejs__jump-forward-button>button {
        background: url('https://cdn.jsdelivr.net/gh/ivorpad/images-src/jumpforward.svg') no-repeat;
    }

    .mejs__button>button {
        color: #555;
    }

    .mejs__horizontal-volume-slider {
        display: none !important;
    }

    @media screen and (max-width: 767px) {
        .no-small-screen {
            display: none;
        }

        .podcast__meta {
            padding: 15px 15px;
            display: flex;
            justify-content: space-between;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            justify-content: center;
        }
    }
</style>

<script>
    "use strict";

    const options = {
        defaultSpeed: '1.00',
        speeds: ['1.25', '1.50', '2.00', '0.75'],
        loop: true,
        skipBackInterval: 15,
        jumpForwardInterval: 15,
        features: [
            "playpause",
            "progress",
            "current",
            "duration",
            "skipback",
            "changespeed",
            "volume",
            "jumpforward",
        ]
    }

    new MediaElementPlayer(
        document.querySelector("audio"),
        options
    );

    // Separate the audio controls so I can style them better.
    (() => {
        const elementTop = document.createElement('div');
        const elementBottom = document.createElement('div');
        elementTop.classList.add('mejs-prepended-buttons');
        elementBottom.classList.add('mejs-appended-buttons');

        const controls = document.querySelector('.mejs__controls');
        controls.prepend(elementTop);
        controls.append(elementBottom);

        const controlsChildren = Array.from(controls.childNodes).filter(v => v.className.startsWith("mejs_"));

        controlsChildren.slice(0, 3).forEach(elem => {
            elementTop.append(elem)
        });

        controlsChildren.slice(3, controlsChildren.length).forEach(elem => {
            elementBottom.append(elem)
        })
    })()
>>>>>>> parent of 22c27de (update)
</script>


<div class="feature-grad">
    <div class="rap-container">
        <div class="podcast">
            <h3 class="podcast__episode_title">Socially Unsocial</h3>
            <h5 class="podcast__title">
                Varendra Podcast &nbsp;
                <b style='color:red'> • Premier</b>
            </h5>

            <div class="podcast__meta">
                <audio controls width="100%">
<<<<<<< HEAD
                    <source
                        src="https://cdn.pixabay.com/download/audio/2022/01/26/audio_d0c6ff1bdd.mp3?filename=the-cradle-of-your-soul-15700.mp3">
                    Your browser does not support the audio tag.
                </audio>
                <a href="#" class="artwork no-small-screen">
                    <img src="https://images.unsplash.com/photo-1499062229216-7c6349e898fb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YW50aSUyMHNvY2lhbHxlbnwwfHwwfHw%3D&w=1000&q=80"
                        alt="">
=======
                    <source src="https://cdn.pixabay.com/download/audio/2022/01/26/audio_d0c6ff1bdd.mp3?filename=the-cradle-of-your-soul-15700.mp3">
                    Your browser does not support the audio tag.
                </audio>
                <a href="#" class="artwork no-small-screen">
                    <img src="https://images.unsplash.com/photo-1499062229216-7c6349e898fb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YW50aSUyMHNvY2lhbHxlbnwwfHwwfHw%3D&w=1000&q=80" alt="">
>>>>>>> parent of 22c27de (update)
                </a>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> parent of 22c27de (update)
