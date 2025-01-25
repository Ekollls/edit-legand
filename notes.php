










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad</title>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        /* General styles */
        body { font-family: Arial, sans-serif; }
        .btn { padding: 5px 10px; margin: 5px; }
        .btn-add, .btn-show { float: right; margin-left: 10px; }

        /* Notepad popup styles */
        .notepad-popup { display: none; position: absolute; top: 50px; left: 50px; width: 300px; background: white; border: 1px solid #ccc; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); z-index: 1000; }
        .notepad-header { padding: 10px; background: #f5f5f5; cursor: move; }
        .notepad-header h2 { margin: 0; display: inline; }
        .notepad-body { padding: 10px; }
        .notepad-footer { padding: 10px; text-align: right; }

        /* Notes list styles */
        .notes-list { display: none; padding: 10px; max-height: 200px; overflow-y: auto; border-top: 1px solid #ccc; }
        .tab-item { padding: 5px 0; cursor: pointer; display: flex; justify-content: space-between; align-items: center; }
        .tab-item.active { background: #e0e0e0; }
        .delete-btn { background: red; color: white; border: none; padding: 2px 5px; cursor: pointer; }
    </style>
</head>
<body>
    <button id="openNotepadBtn" class="btn">Open Notepad</button>

    <div id="notepadPopup" class="notepad-popup">
        <div class="notepad-header" id="notepadHeader">
            <span class="close-btn" id="closeNotepadBtn">&times;</span>
            <h2>Notepad</h2>
            <button id="newPageBtn" class="btn-add">+</button>
            <button id="showPagesBtn" class="btn-show">List Notes</button>
        </div>
        <div class="notepad-body" id="notepadBody">
            <input type="text" id="noteTitle" placeholder="Note Title">
            <div id="editor" style="height: 250px;"></div>
            <div id="notesList" class="notes-list"></div>
        </div>
        <div class="notepad-footer" id="notepadFooter">
            <button id="saveNoteBtn" class="btn">Save</button>
            <button id="clearNoteBtn" class="btn">Clear</button>
        </div>
    </div>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="script.js"></script>
</body>
</html>






</form>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.btn {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}

.notepad-popup {
    display: none;
    position: fixed;
    bottom: 10%;
    right: 10%;
    width: 300px;
    height: 450px;
    background-color: #fff8e1;
    border: 2px solid #ffeb3b;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    z-index: 1000;
    border-radius: 10px;
    overflow: hidden;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.notepad-header {
    padding: 10px;
    background-color: #ffeb3b;
    border-bottom: 1px solid #ffc107;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: move;
}

.close-btn {
    cursor: pointer;
    font-size: 24px;
}

.btn-add {
    padding: 5px 10px;
    font-size: 20px;
    cursor: pointer;
    background-color: #ffc107;
    color: white;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn-add:hover {
    background-color: #ffa000;
}

.btn-show {
    padding: 5px 10px;
    font-size: 14px;
    cursor: pointer;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn-show:hover {
    background-color: #218838;
}

.notepad-body {
    padding: 10px;
    height: 320px;
    overflow-y: auto;
}

.tabs-list {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
    padding-bottom: 5px;
}

.tab-item {
    padding: 5px 10px;
    background-color: #ffc107;
    margin-bottom: 5px;
    border-radius: 5px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
}

.tab-item.active {
    background-color: #ffa000;
}

#noteTitle {
    padding: 5px;
    margin-bottom: 10px;
    width: 100%;
    border: 1px solid #ffc107;
    border-radius: 5px;
    background-color: #fff8e1;
    font-size: 16px;
}

textarea {
    flex-grow: 1;
    width: 100%;
    border: none;
    resize: none;
    background-color: #fff8e1;
    font-size: 16px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

textarea:focus {
    outline: none;
}

.notepad-footer {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    background-color: #ffeb3b;
}

.delete-btn {
    background-color: #ff5722;
    color: white;
    border: none;
    padding: 3px 5px;
    border-radius: 3px;
    cursor: pointer;
}

.delete-btn:hover {
    background-color: #e64a19;
}


</style>


<script>
document.addEventListener('DOMContentLoaded', () => {
    const openNotepadBtn = document.getElementById('openNotepadBtn');
    const closeNotepadBtn = document.getElementById('closeNotepadBtn');
    const notepadPopup = document.getElementById('notepadPopup');
    const notepadHeader = document.getElementById('notepadHeader');
    const saveNoteBtn = document.getElementById('saveNoteBtn');
    const clearNoteBtn = document.getElementById('clearNoteBtn');
    const newPageBtn = document.getElementById('newPageBtn');
    const showPagesBtn = document.getElementById('showPagesBtn');
    const noteTitle = document.getElementById('noteTitle');
    const notepadBody = document.getElementById('notepadBody');
    const notepadFooter = document.getElementById('notepadFooter');
    const notesList = document.getElementById('notesList');

    const LOCAL_STORAGE_KEY = 'notepadNotes';
    let currentPage = 0;
    let notes = JSON.parse(localStorage.getItem(LOCAL_STORAGE_KEY) || '[]');

    // Initialize Quill editor
    const quill = new Quill('#editor', {
        theme: 'snow'
    });

    // Load notes
    const loadNotes = () => {
        notesList.innerHTML = '';
        if (notes.length > 0) {
            notes.forEach((note, index) => {
                const noteItem = document.createElement('div');
                noteItem.className = `tab-item ${currentPage === index ? 'active' : ''}`;
                noteItem.innerHTML = `
                    <span>${note.title || `Page ${index + 1}`}</span>
                    <span>${note.text.replace(/<[^>]+>/g, '').slice(0, 20)}...</span>
                    <button class="delete-btn" data-index="${index}">Delete</button>
                `;
                noteItem.querySelector('span').addEventListener('click', () => {
                    saveNote();
                    currentPage = index;
                    noteTitle.value = notes[currentPage].title || '';
                    quill.root.innerHTML = notes[currentPage].text;
                    updateTabs();
                    showNotesEditor();
                });
                noteItem.querySelector('.delete-btn').addEventListener('click', (e) => {
                    e.stopPropagation();
                    deleteNote(index);
                });
                notesList.appendChild(noteItem);
            });
        } else {
            notes.push({ title: '', text: '' });
        }
    };

    // Update tabs
    const updateTabs = () => {
        const tabItems = document.querySelectorAll('.tab-item');
        tabItems.forEach((tab, index) => {
            if (index === currentPage) {
                tab.classList.add('active');
            } else {
                tab.classList.remove('active');
            }
        });
    };

    // Save note
    const saveNote = () => {
        notes[currentPage] = { title: noteTitle.value, text: quill.root.innerHTML };
        localStorage.setItem(LOCAL_STORAGE_KEY, JSON.stringify(notes));
        loadNotes();
    };

    // Create a new note
    const createNewNote = () => {
        saveNote();
        notes.push({ title: '', text: '' });
        currentPage = notes.length - 1;
        noteTitle.value = '';
        quill.root.innerHTML = '';
        updateTabs();
        localStorage.setItem(LOCAL_STORAGE_KEY, JSON.stringify(notes));
    };

    // Delete a note
    const deleteNote = (index) => {
        notes.splice(index, 1);
        if (currentPage >= notes.length) {
            currentPage = notes.length - 1;
        }
        localStorage.setItem(LOCAL_STORAGE_KEY, JSON.stringify(notes));
        loadNotes();
        if (notes.length > 0) {
            noteTitle.value = notes[currentPage].title;
            quill.root.innerHTML = notes[currentPage].text;
        } else {
            noteTitle.value = '';
            quill.root.innerHTML = '';
        }
    };

    // Show notes list
    const showNotesList = () => {
        noteTitle.style.display = 'none';
        quill.root.parentElement.style.display = 'none';
        notepadFooter.style.display = 'none';
        notesList.style.display = 'block';
    };

    // Show notes editor
    const showNotesEditor = () => {
        noteTitle.style.display = 'block';
        quill.root.parentElement.style.display = 'block';
        notepadFooter.style.display = 'block';
        notesList.style.display = 'none';
    };

    // Event listeners
    openNotepadBtn.addEventListener('click', () => {
        notepadPopup.style.display = 'block';
    });

    closeNotepadBtn.addEventListener('click', () => {
        notepadPopup.style.display = 'none';
    });

    saveNoteBtn.addEventListener('click', () => {
        saveNote();
    });

    clearNoteBtn.addEventListener('click', () => {
        noteTitle.value = '';
        quill.root.innerHTML = '';
    });

    newPageBtn.addEventListener('click', () => {
        createNewNote();
    });

    showPagesBtn.addEventListener('click', () => {
        if (notesList.style.display === 'none' || notesList.style.display === '') {
            saveNote();
            loadNotes();
            showNotesList();
        } else {
            showNotesEditor();
        }
    });

    // Make popups draggable
    const makeElementDraggable = (element, handle) => {
        let posX = 0, posY = 0, mouseX = 0, mouseY = 0;

        const onMouseMove = (e) => {
            e.preventDefault();
            posX = mouseX - e.clientX;
            posY = mouseY - e.clientY;
            mouseX = e.clientX;
            mouseY = e.clientY;
            element.style.top = (element.offsetTop - posY) + "px";
            element.style.left = (element.offsetLeft - posX) + "px";
        };

        const onMouseUp = () => {
            document.removeEventListener('mousemove', onMouseMove);
            document.removeEventListener('mouseup', onMouseUp);
        };

        handle.addEventListener('mousedown', (e) => {
            e.preventDefault();
            mouseX = e.clientX;
            mouseY = e.clientY;
            document.addEventListener('mousemove', onMouseMove);
            document.addEventListener('mouseup', onMouseUp);
        });
    };

    makeElementDraggable(notepadPopup, notepadHeader);

    // Initial load
    loadNotes();
});



</script>