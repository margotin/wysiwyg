/* https://stackoverflow.com/questions/19919852/how-to-insert-a-link-to-selected-text 
   https://developer.mozilla.org/fr/docs/Web/API/Selection/getRangeAt
   https://developer.mozilla.org/en-US/docs/Web/API/Selection/rangeCount
*/
function saveSelection() {
  const ranges = [];
  const selection = window.getSelection();
  const nbSelection = selection.rangeCount;
  for (let i = 0; i < nbSelection; i++) {
    ranges[i] = selection.getRangeAt(i);
  }
  return ranges;
}

function restoreSelection(savedSelection) {
  const selection = window.getSelection();
  selection.removeAllRanges();
  const nbSelection = savedSelection.length;
  for (let i = 0; i < nbSelection; i++) {
    selection.addRange(savedSelection[i]);
  }
}

function execDefaultAction(action) {
  document.execCommand(action, false);
}

function execLinkAction(action) {
  const savedSelection = saveSelection();

  console.log("toto",savedSelection);
  $("#modal").modal("toggle");
  $("#modal #validate").on("click", () => {
    const linkValue = $("#link")[0].value;
    restoreSelection(savedSelection);
    document.execCommand(action, false, linkValue);
  });
}

$(function () {
  const buttons = $("#buttons button[data-action]").get();
  $.each(buttons, (key, button) => {
    $(button).on("click", (event) => {
      const action = event.currentTarget.dataset.action;
      switch (action) {
        case "createLink":
          execLinkAction(action);
          break;
        default:
          execDefaultAction(action);
          break;
      }
    });
  });
});
