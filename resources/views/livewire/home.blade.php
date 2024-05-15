<div class="grid place-content-center h-screen gap-4">
    <ul class="menu bg-base-200 w-56 rounded-box">
        <li><a>Item 1</a></li>
        <li><a>Item 2</a></li>
        <li><a>Item 3</a></li>
    </ul>
    <button class="btn" onclick="my_modal_1.showModal()">Buat Todolist</button>
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Hello!</h3>
            <p class="py-4">Press ESC key or click the button below to close</p>
            <div class="modal-action">
                <form method="dialog">
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</div>
