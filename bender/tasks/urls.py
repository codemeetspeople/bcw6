from django.conf.urls import url

from tasks import views

urlpatterns = [
    url(r'^$', views.IndexView.as_view(), name='index'),
]
