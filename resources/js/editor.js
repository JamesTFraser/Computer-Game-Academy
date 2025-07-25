import Editor from '@toast-ui/editor';

// Make sure the editor is present on the page.
var editorDiv = document.querySelector('#editor');
if (editorDiv) {
    // Initialise the editor.
    const editor = new Editor({
        el: editorDiv,
        previewStyle: 'horizontal',
        height: '500px',
        theme: 'dark'
    });

    // Add the contents of the editor to a hidden form value upon form submission.
    document.querySelector('#postForm').addEventListener('submit', e => {
        e.preventDefault();
        document.querySelector('#content').value = editor.getMarkdown();
        e.target.submit();
    });
}