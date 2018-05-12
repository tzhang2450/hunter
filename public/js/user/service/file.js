/**
 * Created by pro on 2018/5/10.
 */
var json = {
    base_info : {
        nickname : "贵州中和永道会计师事务所",
        avatar : "images/1.png",
        email : "贵州中和永道会计师事务所",
        mobile : "",
        email_validate : true,
        mobile_validate : false,
        identity_validate : false
    },
    hunt_manage : {

    },
    resume : {
        offer_num : 1,
        bid_num : 23,
        favor_num : 12,
        view_num : 242,
        update_time : "2018-04-12 18:22:32",
        verify : true,
        content : [
            {
                key : "期望岗位：",
                value : "钣金工/维修工/机床工"
            },
            {
                key : "工作地点：",
                value : "贵州-安顺"
            },
            {
                key : "期望薪资：",
                value : "5000-10000元"
            },
            {
                key : "到岗时间：",
                value : "1周以内"
            },
            {
                key : "从事行业：",
                value : "机械加工/生产制造"
            },
            {
                key : "求职状态：",
                value : "已离职，寻找新工作"
            }
        ]
    },
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
};
$('.base-info .user-info .avatar img').attr('src', json.base_info.avatar);
if (json.base_info.mobile_validate) {
    $('.base-info .mobile-validate').text('手机已验证');
} else {
    $('.base-info .mobile-validate').text('手机未验证');
}
if (json.base_info.email_validate) {
    $('.base-info .email-validate').text('邮箱已验证');
} else {
    $('.base-info .email-validate').text('邮箱未验证');
}
if (json.base_info.identity_validate) {
    $('.base-info .identity-validate').text('营业执照已验证');
} else {
    $('.base-info .identity-validate').text('营业执照未验证');
}
$('.base-info .user-info .email-info').text(json.base_info.email);
var num = [json.resume.offer_num, json.resume.bid_num, json.resume.favor_num, json.resume.view_num];
$('.hunt-manage .hunter-content').find('.num').each(function(n, value){
    $(this).find('a').text(num[n]);
})
if (json.resume.verify) {
    $('.view-resume .resume-status button').removeClass().addClass('btn btn-xs btn-success-blank');
} else {
    $('.view-resume .resume-status button').removeClass().addClass('btn btn-xs btn-default');
}
$('.view-resume .view-times').find('span').text(json.resume.view_num);
$('.view-resume .update-time').find('span').text(json.resume.update_time);
$.each(json.resume.content, function(n, value){
    var html = '<div class="col-xs-12 col-sm-6">'+value.key+'<span>'+value.value+'</span></div>';
    $('.view-resume .resume-detail').append(html);
});

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
    $('.jobs-manage .table .list-body-l2').append(html);
});