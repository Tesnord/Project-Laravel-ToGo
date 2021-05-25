'use strict'

/*document.addEventListener('DOMContentLoaded', () => {
    console.log('DOMContentLoaded')
    document
        .querySelectorAll('.event-button.to-favorite')
        .forEach(node => {
            node.addEventListener('click', e => {
                e.preventDefault()
                const product_id = e.currentTarget.dataset.productId
                const cookie_favorites = Cookies.get('market_favorites')
                const favorites = JSON.parse(cookie_favorites)

                console.log(favorites)
                console.log(product_id)
            })
        })
})*/

if (document.querySelectorAll('.catalog__item .catalog__item-fav')) {
    document.querySelectorAll('.catalog__item .catalog__item-fav').forEach(t => {
        t.addEventListener('click', e => {
            const product_id = e.target.closest('[data-product-id]').dataset.productId
            let favArr = []
            if (Cookies.get('market_favorites')) {
                favArr = JSON.parse(Cookies.get('market_favorites')).favorites
            }

            const item_index = favArr.indexOf(product_id)
            if (item_index === -1) {
                favArr.unshift(product_id)
                e.target.closest('[data-product-id]').classList.toggle('catalog__item-favorites')
            } else {
                favArr.splice(item_index, 1)
                e.target.closest('[data-product-id]').classList.toggle('catalog__item-favorites')
            }

            document.querySelectorAll('[data-role="favorite_counter"]').forEach(el => {
                el.innerText = favArr.length.toString()
            })

            if (favArr.length === 0) {
                Cookies.remove('market_favorites')
            } else {
                Cookies.set('market_favorites', {"favorites": favArr}, {expires: 7})
            }

            console.log(favArr.length)
            console.log(favArr)
        })
    })
}

if (document.querySelector(".button.button-all[data-product-id]")) {
    document.querySelector(".button.button-all[data-product-id]").addEventListener('click', e => {
        const product_id = e.currentTarget.dataset.productId
        let favArr = []
        if (Cookies.get('market_favorites')) {
            favArr = JSON.parse(Cookies.get('market_favorites')).favorites
        }

        const item_index = favArr.indexOf(product_id)
        if (item_index === -1) {
            favArr.unshift(product_id)
            e.target.querySelector('img').src = "/assets/images/svg/like2.svg"
        } else {
            favArr.splice(item_index, 1)
            e.target.querySelector('img').src = "/assets/images/svg/like.svg"
        }

        if (favArr.length === 0) {
            Cookies.remove('market_favorites')
        } else {
            Cookies.set('market_favorites', {"favorites": favArr}, {expires: 7})
        }

        console.log(favArr)
    })
}

