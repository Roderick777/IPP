$('#formulario_productos').on('submit', function (e) {
    const form = $(this)
    const emptyFields = []
    form.find('input, textarea').each(function () {
      if ($(this).val().trim() === '') {
        emptyFields.push(emptyFields)
      }
    })
  
    // Si todos los campos están llenos, enviar el formulario
    if (emptyFields.length > 0) {
      alert('Por favor, completa todos los campos.')
      e.preventDefault()
    }
  })
  