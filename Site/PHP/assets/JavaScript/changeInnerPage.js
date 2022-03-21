/**
 * Cette fonction va récurcivement supprimer tous les enfants d'un noeux du DOM.
 * @param {Node} div 
 * @since 2022-18-03
 */
function remove(div) {
    while (div.firstChildren) {
        remove(div.firstChildren);
        div.removeChild(div.firstChildren);
    }
}