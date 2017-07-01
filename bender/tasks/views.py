# -*- coding: utf-8 -*-
from core import views
from tasks import models


class IndexView(views.BaseTemplatedView):
    template_name = 'tasks/index.tpl'

    def get_context_data(self, **kwargs):
        context = super(IndexView, self).get_context_data(**kwargs)
        tasks = models.Task.objects.all()

        context.update({
            'tasks': tasks
        })

        return context
