dragula([$('left-events'), $('right-events'),$('right-defaults')])
  .on('drag', function (el) {
    console.log('aa');
    el.className = el.className.replace('ex-moved', '');
  })
  .on('drop', function (el) {
    console.log('ee');

    el.className += ' ex-moved';
  })
  .on('over', function (el, container) {
    container.className += ' ex-over';
  })
  .on('out', function (el, container) {
    container.className = container.className.replace('ex-over', '');
  });
dragula([$('left-rollbacks'), $('right-rollbacks')], { revertOnSpill: true });
dragula([$('left-lovehandles'), $('right-lovehandles')], {
  moves: function (el, container, handle) {
    return handle.className === 'handle';
  }
});