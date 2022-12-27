/**
 * javascript Class
 * wrote by Muhammmad Afeen
 *
 */




const nav =
    {
        /**
         *to save page urls
         */
        targetId: '',
        targetUrl: '',
        entity_id: '',
        parent_id: '',


        /**
         * Section constraints
         * @type {HTMLElement}
         */
        section: document.getElementById('section'),
        nav: document.getElementsByClassName('nav-bar'),
        page: document.getElementById('page'),

        /**
         *indexing funtion
         * @param index
         */


        indexing: function (index) {
            nav.targetId = index.id;
            nav.targetUrl = index.getAttribute('data-url');
            nav.process(nav.targetId, nav.targetUrl, '');

        },
        /**
         * ajax request
         * @param id
         * @param url
         * @param params
         */
        process: function (id, url, params)
        {
                const request = new XMLHttpRequest();
                request.onreadystatechange = function () {
                document.getElementById('div').innerHTML = this.responseText;
                $('#mytable').DataTable();
            }


            request.open("GET", url);
            /**
             * document loader
             */

            request.send();
        }


    }
