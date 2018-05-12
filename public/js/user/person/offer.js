/**
 * Created by pro on 2018/5/10.
 */
var json = {
    recommend_job : [
        {
            id : 123,
            job : "客服主管1",
            company : "贵州恒泰信息科技有限公司",
            salary : "¥5000-10000",
            work_address : "贵州-贵阳",
            status : 1,
            status_name : "招聘中"
        },
        {
            id : 123,
            job : "客服主管2",
            company : "贵州恒泰信息科技有限公司",
            salary : "¥5000-10000",
            work_address : "贵州-贵阳",
            status : 1,
            status_name : "招聘中"
        },
        {
            id : 123,
            job : "客服主管3",
            company : "贵州恒泰信息科技有限公司",
            salary : "¥5000-10000",
            work_address : "贵州-贵阳",
            status : 1,
            status_name : "招聘中"
        }
    ]
}

$.each(json.recommend_job, function(n, value){
    var html = '<div class="row mb0 bb1"><div class="col-sm-5"><div class="row mb0"><div class="col-xs-1 col-sm-1"><label class="chackbox chackbox20"><input type="checkbox"></label></div><div class="col-xs-11 col-sm-11"><div class="list-info"><h4 class="font-bg title-main">';
    html += value.job;
    html += '</h4><div class="font-sm title-sub">';
    html += value.company;
    html += '</div></div></div></div></div><div class="col-sm-7"><div class="row mb0"><div class="col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-0"><div class="font-sm list-info single-line">';
    html += value.salary;
    html += '</div></div><div class="col-xs-3 col-sm-3"><div class="font-sm list-info single-line address">';
    html += value.work_address;
    html += '</div></div><div class="col-xs-2 col-sm-3"><div class="font-sm list-info single-line status">';
    html += value.status_name;
    html += '</div></div><div class="col-xs-2 col-sm-2"><div class="font-sm list-info single-line detail"><a class="font-sm" href="';
    html += 'http://www.hunt.com/recruit/detail.html?id='+value.id+'">详情</a></div></div></div></div></div>';
    $('.recommend-resume .table .list-body-l2-1').append(html);
});