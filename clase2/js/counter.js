function sum(number1, number2) {
  return number1 + number2
}

$('#increment').on('click', () => {
  const number = Number($('#counter_value').text())
  const result = sum(number, 1)
  $('#counter_value').text(result)
})
