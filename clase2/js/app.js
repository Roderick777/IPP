$('#change_button').on('click', () => {
  const newTitle = 'Título modificado por jQuery'
  $('#title').text(newTitle).addClass('title')
})
