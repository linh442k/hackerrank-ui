var contests_list = document.getElementsByClassName(
    "contests-list-item-content-wrapper"
);

var contests_list_wrapper = document.getElementsByClassName(
    "contests-list-item-wrapper"
);

console.log(contests_list);

[...contests_list].forEach((item, index) => {
    item.onclick = () => {
        [...contests_list_wrapper].forEach((item, wrapper_index) => {
            if (wrapper_index !== index) {
                item.classList.remove("contest-detail-open");
            }
        });

        if (
            contests_list_wrapper[index].classList.contains(
                "contest-detail-open"
            )
        ) {
            contests_list_wrapper[index].classList.remove(
                "contest-detail-open"
            );
        } else {
            contests_list_wrapper[index].classList.add("contest-detail-open");
        }
    };
});
